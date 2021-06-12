#!/bin/bash
cd /home/ec2-user/test-ci-cd/
docker-compose build --no-cache
docker-compose up -d
