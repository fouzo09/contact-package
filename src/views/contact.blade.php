<html>
    <head>
        <title>Landig page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Contactez us</h3>
                    <form action="{{ url('contact')  }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="#">Nom complet</label>
                            <input type="text" name="nom_complet" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="#">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="#">Message</label>
                            <textarea class="form-control" name="message" id="#" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
