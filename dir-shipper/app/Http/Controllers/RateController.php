<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use susanBuck\Shipping\Shipment;
use susanBuck\Shipping\Package;
use susanBuck\Shipping\USPS;
use susanBuck\Shipping\RateRequest;

class RateController extends Controller {

    public function getIndex() {
        // Show form to input package and shipping details
        return view('rate.index');
    }

    public function postIndex(Request $request) {

        $this->validate($request, [
            'from_zipcode' => 'required|numeric',
            'to_zipcode' => 'required|numeric',
            'length' => 'required|numeric',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            ]);

        $data = $request->all();

        // Create new shipment
        $shipment = new Shipment;
        $shipment
            ->setFromIsResidential(false)
            ->setFromPostalCode($data['from_zipcode'])
            ->setFromCountryCode('US')
            ->setToIsResidential(true)
            ->setToPostalCode($data['to_zipcode'])
            ->setToCountryCode('US');

        // Create new package
        $package = new Package;
        $package
            ->setLength($data['length'])
            ->setWidth($data['width'])
            ->setHeight($data['height'])
            ->setWeight($data['weight']);

        // Add package to the shipment object
        $shipment->addPackage($package);

        // Create new rate object
        $usps = new USPS\Rate([
            'prod'     => true,
            'username' => '590SUSAN6466',
            'password' => '456HT93XD188',
            'shipment' => $shipment,
            'approvedCodes' => [
                '1', // 1-3 business days, Priority Mail
                '4', // 2-8 business days, Parcel Post
            ],
            //'requestAdapter' => new RateRequest\StubUSPS(),

        ]);

        // Get the rates
        $rates = $usps->getRates();

        if(!$rates) {
            dd("Error getting rates");
        }

        return view('rate.postindex')->with(['data' => $data, 'rates' => $rates]);
    }

}
