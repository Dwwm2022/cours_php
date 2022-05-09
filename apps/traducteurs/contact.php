<?php require_once('partials/header.php'); ?>
<h1 class="text-center">Contact</h1>
<div class="row">
<div class="col-6">
    <form>
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input type="text" id="form4Example1" class="form-control" />
            <label class="form-label" for="form4Example1">Nom</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form4Example2" class="form-control" />
            <label class="form-label" for="form4Example2">Email address</label>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
            <label class="form-label" for="form4Example3">Message</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Envoyer</button>
    </form>
</div>
<div class="col-6">
    <ul class="list-group list-group-light">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <h2 class="fw-bold text-center"><i class="fas fa-language"></i> Traducteurs-Pro</h2v> 
            </div>
            <span class="badge badge-primary rounded-pill"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Adresse:</div> 
            </div>
            <span class="text-dark">05 Rue les Sablons, Melun</span>
        </li> 
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Téléphone: </div>
            </div>
            <span class="text-dark">0100000000</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Email: </div>
            </div>
            <span class="text-dark">contact@traducteurs-pro.com</span>
        </li>
    </ul>
</div>
</div>
<?php require_once('partials/footer.php'); ?>