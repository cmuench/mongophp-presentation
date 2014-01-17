config = {
    _id: "phpugrhh",
    members:[
        { _id : 0, host : "localhost:27018"},
        { _id : 1, host : "localhost:27019"},
        { _id : 2, host : "localhost:27020"},
        { _id : 3, host : "localhost:27021"}
    ]
};

rs.initiate(config);
rs.status();
