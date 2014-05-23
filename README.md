<p align="center">
  <a href="http://woboinc-code-challenge.herokuapp.com/" target="_blank">
    <img src="http://woboinc-code-challenge.herokuapp.com/images/alexandria.png"/>
  </a>
</p>

Alexandria - A small book search throught AWS
=============================================

This is a simple search throught Amazon Web Services using PHP, Twitter Bootstrap and JQuery. This search brings only books.

## Pre-reqs

To run Alexandria, you need to install Curl PHP Module. To install, open a terminal and execute the following command, according with your linux distribution:

Debian / Ubuntu

`
$sudo apt-get install php5-curl
`

Fedora / RedHat / OpenSuse / CentOS

`
$sudo yum install php5-curl
`

You need to have a Amazon Web Services account to get the access keys. If you don't have, access this link and create one.


## Configure your credentials
1. Open the folder class
2. Edit the file "amazon_api_class.php"
3. Locate these variables and insert your credential values

```php
        private $public_key     = "insert-public-key";
        private $private_key    = "insert-private-key";
        private $associate_tag  = "insert-your-associate-tag";
```

4. Save the file and go on

## Accessing Alexandria
You can acess Alexandria on your own local server. Or you can put on any hosting server (such as heroku, dreamhost or any other).

To see Alexandria at a glance, you can access [this link](http://woboinc-code-challenge.herokuapp.com/)