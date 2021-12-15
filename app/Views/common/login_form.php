TESTING VIEW

<div class="container">
    <div class="row justify-content-md-center mt-3">
        <form class="col col-lg-6 col col-md-10 col-sm-12 border p-5">
            <div class="mb-3">
                <label for="comfirm-email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="comfirm-email" aria-describedby="confirm-email-help" required>
                <div id="confirm-email-help" class="form-text">Confirm email.</div>
            </div>
            <div class="mb-2 d-none">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="email-help" >
                <div id="email-help" class="form-text">Enter your email.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
            </div>               
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>