<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Ajax</title>
</head>
<body>
    <button onclick="loadContent()" >Load Content</button>
    <div id="hasil"></div>
</body>
</html>

<script>
    // function loadContent(){
    //     var url = "https://jsonplaceholder.typicode.com/posts/";
    //     fetch(url).then(response => response.json())
    //         then(function(data){
    //             var template = data.map(post => {
    //                 return `
    //                 <h3>${post.title}</h3>
    //                     <p>${post.body}</p>
    //                     <hr>
    //                     `;
    //             })
    //             document.getElementById("hasil").innerHTML = template.join("<br>");

    //         }).catch(function(e){
    //             alert ("Gagal Ngambil Data")
    //         });
    // }


</script>


