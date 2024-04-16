<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            Register
        </div>
        <div class="card-body">
            <p class="card-text"><small>Fill the form below toregister</small></p>
            <form name="register" method="POST" action="<?= URL ?>/users/register">

                <div class="form-group">
                    <label for="name">Name: <sup class="text-danger">*</label>
                    <input type="text" name="name" id="name" value="<?=$data['name']?>" class="form-control">                    
                </div>

                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</label>
                    <input type="text" name="email" id="email" value="<?=$data['email']?>"class="form-control">                   
                </div>

                <div class="form-group">
                    <label for="pass">Password: <sup class="text-danger">*</label>
                    <input type="password" name="pass" id="pass" value="<?=$data['pass']?>"class="form-control">                    
                </div>

                <div class="form-group">
                    <label for="pass_confirm">Password Confirm: <sup class="text-danger">*</label>
                    <input type="password" name="pass_confirm" id="pass_confirm" value="<?=$data['pass_confirm']?>"class="form-control">                    
                </div>

                <div class="row m-2">
                
                    <div class="col-md-6">
                        <div class="d-grid gap-2">
                            <input type="submit" value="Register" class="btn btn-info">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <a href="<?= URL ?>/users/login"> Already have an account? Login</a>
                    </div>

                </div>

            </form>

        </div>
    </div>
</div>