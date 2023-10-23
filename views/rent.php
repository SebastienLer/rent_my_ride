<div class="container-fluid">
    <h2 class="text-center mt-3">Reservation</h2>
    <form class="row m-3" method="post">
        <div class="col-12 col-sm-6 col-md-4 p-3">
            <label for="lastname" class="border rounded-3 p-1 white mt-3">Nom : </label>
            <input type="text" class="form-control mt-3" name="lastname" placeholder="ex: Dupont" require>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-3">
            <label for="firstname" class="border rounded-3 p-1 white mt-3">Prénom :</label>
            <input type="firstname" class="form-control mt-3" placeholder="ex: Serge" require>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-3">
            <label for="mail" class="border rounded-3 p-1 white mt-3">Email :</label>
            <input type="email" class="form-control mt-3" placeholder="ex:un.email@qqch.qqch" require>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-3">
            <label for="birthday" class="border rounded-3 p-1 white mt-3">Date de naissance :</label>
            <input type="date" class="form-control mt-3" require>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-3">
            <label for="phone" class="border rounded-3 p-1 white mt-3">Téléphone :</label>
            <input type="text" class="form-control mt-3" placeholder="ex : 0123456789" require>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-3">
            <label for="zipCode" class="border rounded-3 p-1 white mt-3">Code postal :</label>
            <input type="text" class="form-control mt-3" placeholder="ex: 75150" require>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-3">
            <label for="town" class="border rounded-3 p-1 white mt-3">Ville :</label>
            <input type="text" class="form-control mt-3" placeholder="ex: Paris" require>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-3">
            <label for="startDate" class="border rounded-3 p-1 white mt-3">Début de la reservation : </label>
            <input type="date" class="form-control mt-3" require>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-3">
            <label for="endDate" class="border rounded-3 p-1 white mt-3">Fin de réservation :</label>
            <input type="date" class="form-control mt-3" require>
        </div>
        <div class="d-flex justify-content-center m-3">
            <button id="reserveButton" class="border rounded-3 p-1 mt-3" type="submit">Reserver</button>
        </div>
    </form>
</div>