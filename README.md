# Product Recommender
This application helps you discover new products you might like based on 
previously rated products. For example if you have enjoyed several movies 
starring Tom Cruise, you might also enjoy any other movies starring Tom Cruise.

How this works is that the application takes multiple attributes of a product 
type and calculates their respective correlations and covariances with a score 
of that product. When more than one product are rated, the attributes 
themselves get relative correlation that tell how significant they are to 
calculate rating.

The reason for these calculations is that you may not consciously know why 
you're enjoying both the movie *Valkyrie (Bryan Singer, 2008)* and *Magnolia 
(Paul Thomas Anderson, 1999)*. Perhaps it's because they're both starring Tom 
Cruise, or perhaps it's because they're both produced in the US, or something 
else entirely. By using this application, the correlations are calculated 
automatically and by rating more and more products, a taste profile is built up 
specifically tailored for you. You may discover that you enjoy Venezuelan 
comedies from the 1970's that are shorter than 90 minutes. This application 
will then recommend you more of that kind of movies.

## Table of contents
* [Who is this for?](#who-is-this-for)
* [Prerequisites](#prerequisites)
* [Installation instructions](#installation-instructions)
* [Usage](#usage)
* [Licensing](#licensing)
* [How to contribute](#how-to-contribute)
* [Versioning](#versioning)

## Who is this for?
This application is for people who wants product recommendations based on their 
own tastes.

## Prerequisites
This application is written in PHP and uses CodeIgniter as its framework. Thus, 
you will need:

* [PHP 5.3.7 or newer][6]
* a web server capable of running PHP, for example [Apache][1] or [IIS][4]
* a database driver such as *mysqli*, *postgre* and *sqlite3* (please refer to 
[CodeIgniter's server requirements][5] for information which database drivers 
are specifically supported)

## Installation instructions
More info is coming once the first release is out.

## Usage
More info is coming once the first release is out.

## Licensing
This application is licensed under the MIT License, and so is the framework 
[CodeIgniter][7] that I use. For detailed license terms, please read 
[LICENSE][8] for this application, and [LICENSE-CodeIgniter][11] for 
CodeIgniter.

## How to contribute
Thank you for wanting to contribute to this project. Open source is all about 
community. Go and read the document [CONTRIBUTING.md][9] for more information 
on with what you can contribute and how to go about it.

## Versioning
This project uses [Semantic Versioning 2.0.0][3] for version numbering. To see 
what's changed between versions, please read [CHANGELOG.md][10]. That file also 
has links to the download section of each release.


[1]: https://httpd.apache.org/
[3]: https://semver.org/
[4]: https://www.iis.net/
[5]: https://www.codeigniter.com/user_guide/general/requirements.html
[6]: https://php.net
[7]: https://www.codeigniter.com
[8]: LICENSE
[9]: CONTRIBUTING.md
[10]: CHANGELOG.md
[11]: LICENSE-CodeIgniter
