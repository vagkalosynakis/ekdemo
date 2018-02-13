$(document).ready(function () {

            var jsondata = [
                {
                    "id": "1",
                    "Name": "Name1",
                    "Address": "Address1"
                },
                {
                    "id": "2",
                    "Name": "Name2",
                    "Address": "Address2"
                },
                {
                    "id": "3",
                    "Name": "Name3",
                    "Address": "Address3"
                },
                {
                    "id": "4",
                    "Name": "Name4",
                    "Address": "Address4"
                },
                {
                    "id": "5",
                    "Name": "Name5",
                    "Address": "Address5"
                }
            ];

            $('#users').bootstrapTable({
                data: jsondata
            });
        });