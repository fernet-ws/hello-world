# Simple app in Fernet

This app contains 4 components:

* [App](src/Component/App.php) is the main component. Here's where all begins.
* [Hello](src/Component/Hello.php) is the simplest. It has a single attribute.
* [Counter](src/Component/Counter.php) is more complex because they need a [service](src/Service/NumberToWord.php) that's injected in the constructor and also have onClick events written purely in PHP.
* [Button](src/Component/Button.php) is very small but not so easy to understand. It's just a wrapper for an &lt;a&gt; tag with the "button" class.

It was made using [Fernet](https://github.com/pragmore/fernet) the component based PHP Framework.
