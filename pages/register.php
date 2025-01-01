<?php
include_once("./header.php");
require_once("../php/csrfToken.php");
?>
<div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow">
                            <div class="card-body">
                                <h2
                                    class="card-title text-center text-uppercase"
                                >
                                    Register
                                </h2>
                                <form class="card-text" method="post" action="../php/register.php">
                                    <div class="mb-3">
                                        <input
                                            type="hidden"
                                            name="csrf_token"
                                            value="<?php echo generateCSRFToken();?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="exampleInputEmail1"
                                            class="form-label"
                                            >Email address</label
                                        >
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            placeholder="Email"
                                            value=""
                                            required
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="exampleInputPassword1"
                                            class="form-label"
                                            >Password</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="exampleInputPassword1"
                                            name="password"
                                            minlength="8"
                                            placeholder="Password"
                                            value=""
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input
                                            type="checkbox"
                                            class="form-check-input"
                                            id="exampleCheck1"
                                            name="remember"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="exampleCheck1"
                                            >Remember me</label
                                        >
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-between"
                                    >
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Submit
                                        </button>
                                        <span
                                            >Login
                                            <a href="./login.php"
                                                >here?</a
                                            ></span
                                        >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include_once("./footer.php");?>
