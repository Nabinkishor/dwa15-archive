>> &ldquo;*OpenSSL is an open-source implementation of the SSL and TLS protocols. The core library, written in the C programming language, implements basic cryptographic functions and provides various utility functions. Wrappers allowing the use of the OpenSSL library in a variety of computer languages are available.*&rdquo; -[wikipedia: OpenSSL](https://en.wikipedia.org/wiki/OpenSSL)


## Preface
If you have insight into best security practices regarding the following topic, I'm open to hearing your thoughts. Don't hesitate to contact me to discuss.

## Summary
Installing Composer on Mac will tell you your OpenSSL is out of date.

If you're not experienced with making system changes, I suggest leaving it as is for the time being. The version warning is not a significant security concern, and the upcoming version of MAMP will have an updated version of OpenSSL bundled in rendering this a moot issue.

If you want to learn more, or decide you do want to upgrade, you can read the full details below.

The procedures outlined below have only been tested on Mac El Capitan 10.11.3 so far. Instructions may vary for different versions.



## OpenSSL and Composer

When installing Composer on Mac, you may be told your OpenSSL library is out of date:

<img src='http://making-the-internet.s3.amazonaws.com/laravel-openssl-message-from-composer@2x.png' style='max-width:687px; width:100%' alt='Installing Composer on Mac'>

Despite the message, the installation of Composer completes. As the language of the message suggests, the upgrade is a suggestion, not a requirement.

The question remains, then&mdash; should you upgrade OpenSSL?

Here's some background to help you decide:

The latest version of OpenSSL shipped with Apple OS X is OpenSSL `0.9.8`, which is out of date relative to the current version of OpenSSL (`1.0.2` as of Jan 2015). (Apple is not updating OpenSSL because it has switched to its own crypto software, Common Crypto.)

Tip: You can see what version of OpenSSL you're using with this command:

```bash
$ openssl version
```

While the `0.9.8` version is out of date, there are no significant security concerns between this older version and the latest. Also note that `0.9.8` was not impacted by the infamous Heartbleed vulnerability discovered in 2014.

Despite this assurance, you may still want to upgrade OpenSSL, but you should be cautious about this as the upgrade may be incompatible with software on your computer that is using the older version of OpenSSL.

Because of this potential conflict in versions, if you do upgrade, it's suggested that you keep the original `0.9.8` version to revert to if needed. Instructions for doing this are outlined in the next section.



## Updating OpenSSL

Before updating, first run this command to see where OpenSSL is running from:

```bash
$ which openssl
```

If it says `/usr/bin/openssl` then your system is using the default version of OpenSSL that ships with OS X.

One way to obtain an updated version of OpenSSL is via Homebrew, a package manager for Mac OS X.

Instructions for installing/using Homebrew can be found here: <http://brew.sh>

Once Homebrew is installed the following  commands will update openssl:

```bash
$ brew update
$ brew install openssl
$ brew link --force openssl
```

Once that's done, check again to see where OpenSSL is now running from:

```bash
$ which openssl
```

It should now report `/usr/local/bin/openssl`,  which is actually an alias to the OpenSSL install in Homebrew's `Cellar` folder:

```bash
$ ll /usr/local/bin/openssl
lrwxr-xr-x  1 Susan  admin  36 Feb 17 14:34 /usr/local/bin/openssl@ -> ../Cellar/openssl/1.0.2f/bin/openssl
```

Because `/usr/local/bin/` should have precedence over `/usr/bin/` in your PATH, your system is now using the OpenSSL you got via Brew, not the default OpenSSL that came with your OS.

If this new version of OpenSSL causes issues, you can easily disable it by deleting `/usr/local/bin/openssl` or renaming it:

```bash
$ mv /usr/local/bin/openssl /usr/local/bin/openssl-DISABLED
```


## Useful commands
Which OpenSSL are you using:

```bash
$ which openssl
```

What version of OpenSSL are you using:

```bash
$ openssl version
```

Check which currently running apps link against the OpenSSL libs:

```bash
$ sudo lsof -n | grep -i ssl
```

## Reference
+ [Alternative to Homebrew for installing OpenSSL](https://gist.github.com/tmiz/1441111)
+ [Mac OS X and the OpenSSL Heartbleed vulnerability](http://sgeb.io/articles/macosx-and-openssl-heartbleed/)
+ [OpenSSL, OS X El Capitan and Brew](https://solitum.net/openssl-os-x-el-capitan-and-brew/)
+ [Lex Sheehan: Upgrade OpenSSL on Mac OSX](http://lexsheehan.blogspot.com/2014/05/upgrade-openssl-on-mac-osx.html)
