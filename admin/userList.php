<body>

    <?php require 'sidebar.php'; ?>

    <section class="home">
        <h1>User Lists</h1>
        <a href="newUser">Add New User</a>
        <br><br>

        <table class="userlist">
            <thead>
                <tr>
                    <td>Id</td>
                    <td></td>
                    <td>Username</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>User Type</td>
                    <td>Actions</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="assets/imgs/customer01.jpg" alt="">
                    </td>
                    <td>
                        user
                    </td>
                    <td>user full name</td>
                    <td>mail@email.com</td>
                    <td>User</td>
                    <td>
                        <div>

                            <a href=""><span class="material-symbols-outlined">
                                visibility
                            </span>
                        </a>
                        <a href=""><span class="material-symbols-outlined">
                            delete
                        </span></a>
                        <a href=""><span class="material-symbols-outlined">
                            edit
                        </span></a>
                    </div>
                    </td>
                </tr>

            </tbody>


        </table>
    </section>
</body>