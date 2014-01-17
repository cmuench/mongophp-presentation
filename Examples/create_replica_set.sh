#!/bin/bash
mkdir -p ./data/rs1 ./data/rs2 ./data/rs3 ./data/rs4
mongod --replSet phpugrhh --logpath "data/1.log" --dbpath ./data/rs1 --port 27018 --smallfiles --fork
mongod --replSet phpugrhh --logpath "data/2.log" --dbpath ./data/rs2 --port 27019 --smallfiles --fork
mongod --replSet phpugrhh --logpath "data/3.log" --dbpath ./data/rs3 --port 27020 --smallfiles --fork
mongod --replSet phpugrhh --logpath "data/4.log" --dbpath ./data/rs4 --port 27021 --smallfiles --fork
