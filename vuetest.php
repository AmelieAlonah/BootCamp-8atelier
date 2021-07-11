<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>   
  </head>
  <body>
    <div id="app">
      {{ message }}   

      <div v-bind:title="message">
        Hover your mouse over me for a few seconds
        to see my dynamically bound title!
      </div>

      <button v-on:click="newMessage">
        Change message !
      </button>
    </div>

    <script>
      let app = new Vue({
        el: '#app',
        data: {
          message: 'Hello Vue !'
        },
        methods: {
          newMessage: function () {
            this.message = "New message !"
          }
        }
      });
    </script>   
  </body>
</html>