<?php if (isset($_SESSION['prarthi_register_success'])) { ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['prarthi_register_success'] ?>
                    </div>
                <?php } unset($_SESSION['prarthi_register_success']); ?>
