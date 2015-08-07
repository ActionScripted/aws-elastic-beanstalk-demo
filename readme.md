Elastic Beanstalk Demo
===

* Install AWS CLI and EB CLI
* Install docker, docker-compose and boot2docker (if necessary)
* Clone this repo
* Setup your EB environment with `eb init`
* Run locally with `eb local run`
    * Running `eb local run` will tail combined output for all logs across all containers just like docker-compose
    * Check the `.elasticbeanstalk` folder for configs
