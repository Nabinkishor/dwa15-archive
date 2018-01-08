@extends('templates.master')

@section('/head')
    <style>
    img.service {
        width:100px;
    }
    </style>
@endsection

@section('title')
    Software & Services
@endsection

@section('content')

<script>var jumpTo = true;</script>

@markdown

# Software & Services


## Services
__Github:__
Every student is required to have a Github account. Because Github is free to use for public repositories (which we'll use in this course) there is no need to have a paid Github plan if you don't already have one.

__DigitalOcean:__ In this course we'll use [DigitalOcean](https://cloud.digitalocean.com/settings/referrals?i=6f601b) as our production server provider. Their lowest tier server (aka Droplet) costs $5/month and will be sufficient for our needs. You will need to maintain this server for the duration of the semester.

If this cost is prohibitive, you can sign up for the [Github Education Student Developer Pack](https://education.github.com/pack) (SDP) whch will give you $50 in DigitalOcean credits. The SDP has to be approved, so sign up early to avoid missing any deadlines at the start of the semester.

While you can create your [DigitalOcean](https://cloud.digitalocean.com/settings/referrals?i=6f601b) account now, you should not create any Droplets until instructions are provided in Week 2.

If you already have a server provider you will still need to use DigitalOcean, for the reasons listed below under *Choosing to use other tools, languages or services*.




## Operating Systems
Instruction in this course accommodates **Mac OS** and **Windows**.

Unix-y users are allowed to take the course, but must be prepared to do independent legwork for the system related instructions given at the beginning of the course. Every semester we typically have a handful of Unix users who we encourage to work together to help one another out.


## Administrative Privileges
Because we work with a lot of different software packages in this course, it is expected that you will be able to work on a machine where you have **Administrative Privileges**. Given this requirement, you will be unable to complete this course using lab or other public computers.


## Software
__Code Editors__
You can use whatever code editor you prefer, the following are just suggestions if you don't already have a favorite:

+ (Mac/PC) [Atom](http://atom.io/) (This is what you'll see me use in lecture)
+ (Mac/PC) [PHPStorm](http://jetbrains.com/phpstorm/) (You can apply for a free student license [here](https://www.jetbrains.com/student/))

__Command Line__

These are the command line programs we support in this course:

+ (Mac) Terminal (Installed on Macs by default, no need to download anything)
+ (PC) Cmder (We'll be using a customized version for the class so do *not* download the one from Cmder directly; I'll explain more in lecture).

__Local Servers__

These are the local servers we'll support in this course:

* (Mac) [MAMP](http://mamp.info/en/)
* (PC) [XAMPP](https://www.apachefriends.org/index.html)



## Other tools or services
In this course we often get questions about using different tools or services than what is suggested in the curriculum.

For example:

* *I already have WAMP on my PC, do I have to use XAMPP?*
* *I already have a VPS from AWS, do I have to use DigitalOcean?*

The policy on this is always the same: **we recommend you stick with the tools we suggest, but if you go off-course, you do so at your own risk.**

It would be to your advantage to stick with our suggestions as that's what the lectures will pull from, that's what the notes are on, and that's what the teaching team is trained in. Furthermore, our suggestions have been tested to make sure they accommodate all the goals we have in this course. We'd like to avoid situations where students start off with a piece of software that works for tasks in Week 1 and 2, only to find out that something you need to accomplish in Week 8 can't be done.

Instructions for different platforms can vary greatly, and it is impossible to support all options, especially in a large course. By sticking with set recommendations, we can provide more cohesive instruction and most efficiently help everyone.


@endmarkdown
@endsection
