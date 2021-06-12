#!/bin/bash
cd /home/ec2-user/test-ci-cd/
# mkdir root && mv web $_ && mv vendor root 
docker-compose build --no-cache
docker-compose up -d
