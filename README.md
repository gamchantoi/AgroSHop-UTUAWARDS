### Shopware Server Requirements

- PHP 5.4.0 or above
- PHP's `cURL` and `GD` library
- An Apache web server
- Apache's `mod_rewrite` module
- MySQL 5.5.0 or above

### Installation via Git

Follow the instruction below if you want to install Shopware 5 using Git.

1.) Clone the git repository to the desired location using:

    git clone https://github.com/shopware/shopware.git

In case you wish to contribute to Shopware, fork the `5.1` branch rather than cloning it, and create a pull request via Github. For further information please read the section "Get involved" of this document.

2.) Set the correct directory permissions:

    chmod 755 config.php
    chmod -R 755 var
    chmod -R 755 web
    chmod -R 755 files
    chmod -R 755 media
    chmod -R 755 engine/Shopware/Plugins/Community

Depending on your server configuration, it might be necessary to set whole write permissions (777) to the files and folders above.
You can also start testing with lower permissions due to security reasons (644 for example) as long as your php process can write to those files.

3.) An [Ant](http://ant.apache.org/) Buildfile is used to set up the configuration and database connection:

    cd build/
    ant configure
    ant build-unit

4.) Download the test images and extract them:

Go to the checkout directory and download the test images:

	wget -O test_images.zip http://releases.s3.shopware.com/test_images.zip

Unzip the files to the checkout directory:

	unzip test_images.zip

You can now access your shop

Backend Login: demo/demo

The test_images.zip file includes thumbnails for the new responsive theme and the old deprecated template.

If you want to have full featured demo data, you should download the respective demo data plugin in the First Run Wizard or in the Plugin Manager.