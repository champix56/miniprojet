<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        #content>div {
            display: inline-block;
        }

        .content-image {
            vertical-align: top;
            width: 200px;
            height: 200px;
        }

        .content-text {
            width: 70%;
            margin-left: auto;
            ;
            margin-right: auto;
            ;

        }
    </style>
</head>

<body>
    <div>
        <div id="navbar">
            <div class="navbar navbar-inverse">
                <a class="navbar-brand" href="#">Title</a>

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                </form>
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>

                </ul>
            </div>
            <div id="content">

            </div>
        </div>
        <script>
            function loadArticle(id) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'article.php?id='+id);
                xhr.onreadystatechange = function (event) {
                    if (event.target.readyState == 4) {
                        console.log(event.target);
                        document.querySelector('#content').innerHTML =
                            event.target.responseText;
                    }
                };
                xhr.send();
            }
            document.querySelector('input')
                .addEventListener('change', function (evt) {
                    console.log(evt);
                    loadArticle(evt.target.value);
                });
        </script>
</body>

</html>