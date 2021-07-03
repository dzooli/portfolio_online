# Online Portfolio

## Description

A basic Bootstrap template for simple portfolios. This is my personal project for my designer portfolio but could be used by somebody else.

## Usage

Edit the ```common/html/navbar.php``` links and place the images named ```0x.png``` - ```99.png``` in the apropriate directory under the ```img``` directory. The program will generate a simple slideshow for you about the images categorized by diferent topics.

The default timeout for a slide is 3s and overwritten in ```page.php```. You can overwrite the default by editing the ```common/code/gencaroussel.php:gen_carousel()``` function signature.

Then start or setup a webserver to deploy your brand new portfolio.

For example with the internal webserver:

```bash
php -S 127.0.0.1:8080 -t .
```

## License

MIT
