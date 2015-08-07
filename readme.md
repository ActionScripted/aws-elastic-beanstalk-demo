Elastic Beanstalk Demo
===

* Install AWS CLI and EB CLI
* Install docker, docker-compose and boot2docker (if necessary)
* Clone this repo
* No application? Setup an EB application with `eb init`
* No environment? Setup an EB environment with `eb create -ip INSTANCE_PROFILE -db`
    * Not sure about the INSTANCE_PROFILE? https://docs.aws.amazon.com/elasticbeanstalk/latest/dg/create_deploy_docker_ecstutorial.html#create_deploy_docker_ecstutorial_role
* Run locally with `eb local run`
    * Running `eb local run` will tail combined output for all logs across all containers just like docker-compose
    * Check the `.elasticbeanstalk` folder for configs
