
    <!DOCTYPE html>
    <html>
        <head>
            <title>Sign Up</title>
             <?php wp_head(); ?>
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <form style="margin-top: 30vh">
                            <div class="form-group">
                                <label for="">Sign Up Form</label>
                                <p>Insert the following data.</p>
                                <input id="username" type="text" class="form-control" name="username" placeholder="username"/>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control" name="password" placeholder="password"/>
                            </div>
                                <input id="email" type="email" class="form-control" name="email" placeholder="user@provider.com"/>
                            <div class="form-group">
                                <input type="submit" class="btn btn-default" style="margin-top: 15px" value="Submit"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </html>