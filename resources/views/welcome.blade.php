<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       
    </head>
    <body>
        <h3 class="text-center">New Users</h3>
        <div class="container">
            
            <ul class="list-group">
                <li v-for="user in users" class="list-group-item">@{{ user }}</li>
            </ul>
            

            <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.19/vue.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.5/socket.io.min.js"></script>

            <script>
            var socket = io('http://localhost:3000/');
            new Vue({
                el: 'body',
                data: {
                    users: []
                },
                ready: function() {
                    socket.on('test-channel:UserSignedUp', function(data) {
                        this.users.push(data.username);
                    }.bind(this));
                }
            });
        </script>
        </div>
    </body>
</html>
