TESTING VIEW

<div class="container">

    <div class="row justify-content-md-center mt-3">
        <form class="col col-lg-6 col col-md-10 col-sm-12 border p-5">
            <div class="mb-2">
                <label for="user-name" class="form-label">User name</label>
                <input type="text" class="form-control" id="user-name" aria-describedby="user-help" required>
                <div id="user-help" class="form-text">Your user.</div>
            </div>
            <div class="mb-2">
                <label for="adress" class="form-label">Your Address</label>
                <input type="text" class="form-control" id="adress" aria-describedby="adress-help" required>
                <div id="adress-help" class="form-text">Your adress.</div>
            </div>
            <div class="mb-2">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="adress" aria-describedby="phone-help">
                <div id="phone-help" class="form-text">Your phone.</div>
            </div>
            <div class="mb-2">
                <label for="input-email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="input-email" aria-describedby="input-email-help" required>
                <div id="input-email-help" class="form-text">Enter your email.</div>
            </div>
            <div class="mb-2 d-none">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="email-help">
                <div id="email-help" class="form-text">Enter your email.</div>
            </div>
            <div class="mb-2">
                <label for="comfirm-email" class="form-label">Confirm email address</label>
                <input type="email" class="form-control" id="comfirm-email" aria-describedby="confirm-email-help" required>
                <div id="confirm-email-help" class="form-text">Confirm email.</div>
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" minlenght="6" required>
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Comfirm password</label>
                <input type="password" class="form-control" id="confirm-password" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>