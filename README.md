# [Start Bootstrap](http://startbootstrap.com/) - [Agency](http://startbootstrap.com/template-overviews/agency/)

[Agency](http://startbootstrap.com/template-overviews/agency/) is a one page agency portfolio theme for [Bootstrap](http://getbootstrap.com/) created by [Start Bootstrap](http://startbootstrap.com/). This theme features several content sections, a responsive portfolio grid with hover effects, full page portfolio item modals, a responsive timeline, and a working PHP contact form.

## Getting Started

Several options are available to get started quickly:
* [Download the latest release on Start Bootstrap](http://startbootstrap.com/template-overviews/agency/)
* Clone the repo: `git clone https://github.com/BlackrockDigital/startbootstrap-agency.git`
* Fork the repo

## Developing Using Source Files

To use the source files, you will need to have npm installed globally along with Gulp.js. To start:
* Run `npm install` in the root directory
* Run `gulp dev` and edit the files as needed

If you need to update the plugins included with this template, simply run the following tasks:
* First run `npm update` to update the dependencies
* Then run `gulp copy` to copy the new versions to their proper destinations

## Bugs and Issues

Have a bug or an issue with this template? [Open a new issue](https://github.com/BlackrockDigital/startbootstrap-agency/issues) here on GitHub or leave a comment on the [template overview page at Start Bootstrap](http://startbootstrap.com/template-overviews/agency/).

## Creator

Start Bootstrap was created by and is maintained by **[David Miller](http://davidmiller.io/)**, Owner of [Blackrock Digital](http://blackrockdigital.io/).

* https://twitter.com/davidmillerskt
* https://github.com/davidtmiller

Start Bootstrap is based on the [Bootstrap](http://getbootstrap.com/) framework created by [Mark Otto](https://twitter.com/mdo) and [Jacob Thorton](https://twitter.com/fat).

## Copyright and License

Copyright 2013-2016 Blackrock Digital LLC. Code released under the [MIT](https://github.com/BlackrockDigital/startbootstrap-agency/blob/gh-pages/LICENSE) license.

# IC
Bootstrap de Iglesia Cristiana

This Node.js sample application uses the [Express](http://expressjs.com/) framework and [Bootstrap](http://getbootstrap.com/) to build a simple, scalable customer signup form that is deployed to [AWS Elastic Beanstalk](http://aws.amazon.com/elasticbeanstalk/). The application stores data in [Amazon DynamoDB](http://aws.amazon.com/dynamodb/) and publishes notifications to the [Amazon Simple Notification Service (SNS)](http://aws.amazon.com/sns/) when a customer fills out the form.

## Themes
The code includes several Bootstrap themes from [bootswatch.com](http://bootswatch.com/). You can dynamically change the active theme by setting the THEME environment variable in the [Elastic Beanstalk Management Console](https://console.aws.amazon.com/elasticbeanstalk):

Installed themes include:

* [amelia](http://bootswatch.com/amelia)
* [default](http://bootswatch.com/default)
* [flatly](http://bootswatch.com/flatly)
* [slate](http://bootswatch.com/slate)
* [united](http://bootswatch.com/united)

## app_config.json
The application stores connection info in a JSON file, app_config.json. The key-value pairs are as follows:
* AWS_REGION: the AWS region code, e.g. 'us-west-2'
* STARTUP_SIGNUP_TABLE: the name of the DynamoDB table where the app stores signup data (e.g. 'my-ddb-table')
* NEW_SIGNUP_TOPIC: The [ARN](http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html) of the SNS topic that the app uses to send notifications (e.g. 'arn:aws:sns:us-west-2:123456789012:my-supercool-app')

Currently, the values are set to empty strings. You'll need to enter appropriate values for your environment.

