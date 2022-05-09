    <a href="" class="btn btn-info btn-block" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Inscrivez-vous</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-language"></i> Je m'inscris</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= $errMsg; ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-outline mb-4">
                            <input type="text" id="nom" name="nom" class="form-control" required />
                            <label class="form-label" for="nom">Nom*</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="prenom" name="prenom" class="form-control" required />
                            <label class="form-label" for="prenom">Prénom*</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="number" min="18" id="age" name="age" class="form-control" required />
                            <label class="form-label" for="age">Age*</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="telephone" name="telephone" class="form-control" required />
                            <label class="form-label" for="telephone">Telephone*</label>
                        </div>
                        <div class="form-outline mb-2">
                            <input type="email" id="email" name="email" class="form-control" required />
                            <label class="form-label" for="email">Email adresse*</label>
                        </div>
                        <div class="col-12 mb-2">
                            <label class="" for="langue">Langue*</label>
                            <select class="select form-control" id="langue" name="langue" required>
                                <option value="0" hidden>Choisir</option>
                                <?php if ($res3) {
                                    while ($langue = mysqli_fetch_assoc($res3)) { ?>
                                        <option value="<?= $langue['id']; ?>"><?= ucfirst($langue['libelle']); ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="image">Image*</label>
                            <input type="file" id="image" name="image" class="form-control" required />
                        </div>

                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                            <label class="form-label" for="description">Description</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="soumis" class="btn btn-primary btn-block">
                            <i class="far fa-paper-plane"></i> Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>