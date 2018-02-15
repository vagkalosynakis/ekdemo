$(document).ready(function () {

            var users = [
                {"id": "1","Name": "John","Address": "Street 1"},
                {"id": "2","Name": "George","Address": "Close 2"},
                {"id": "3","Name": "Mark","Address": "Drive 3"},
                {"id": "4","Name": "Magdalene","Address": "Road 4"},
                {"id": "5","Name": "Maria","Address": "Gonzalez"},
                {"id": "6","Name": "Jackie","Address": "Chan"}
                ];

            $('#users').bootstrapTable({
                data: users
            });

            var cars = [
                {"Make": "Honda","Model": "Civic","Color": "Black"},
                {"Make": "Peugeot","Model": "206","Color": "White"},
                {"Make": "Ferrari","Model": "F50","Color": "Silver"},
                {"Make": "Suzuki","Model": "Jimny","Color": "Red"},
                {"Make": "BMW","Model": "M3","Color": "Black"},
                {"Make": "Toyota","Model": "Corolla","Color": "Blue"}
                ];

            $('#cars').bootstrapTable({
                data: cars
            });

            var rd = [
                {"rd1": "1","rd2": "H3llo","rd3": "This"},
                {"rd1": "10","rd2": "World","rd3": "table"},
                {"rd1": "25","rd2": "Tod@y","rd3": "is"},
                {"rd1": "27","rd2": "We","rd3": "for"},
                {"rd1": "4","rd2": "are","rd3": "demonstration"},
                {"rd1": "12","rd2": "h@ppy","rd3": "only"}
                ];

            $('#rd').bootstrapTable({
                data: rd
            });
        });