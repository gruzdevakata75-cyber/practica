<?php
?>
<!-- Карточки мастеров -->
<div class="container">
    <h2 class="text-center mb-4">Наши мастера</h2>
    
    <div class="row">
        <!-- Мастер 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100"> 
                <img src="/images/card1.jpg" class="card-img-top" alt="Светлана">
                <div class="card-body">
                    <h5 class="card-title">Мастер Светлана</h5>
                    <p class="card-text">Парикмахер — специализируется на стрижке, укладке, окрашивании волос.</p>
                    <a href="#" class="btn btn-primary">Записаться</a>
                </div>
            </div>
        </div>
        
        <!-- Мастер 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/images/card2.jpg" class="card-img-top" alt="Снежана">
                <div class="card-body">
                    <h5 class="card-title">Мастер Снежана</h5>
                    <p class="card-text">Мастер маникюра и педикюра — уход, дизайн, укрепление и наращивание ногтей.</p>
                    <a href="#" class="btn btn-primary">Записаться</a>
                </div>
            </div>
        </div>
        
        <!-- Мастер 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/images/card3.jpg" class="card-img-top" alt="Серафима">
                <div class="card-body">
                    <h5 class="card-title">Мастер Серафима</h5>
                    <p class="card-text">Визажист — создает образы для жизни, съёмок и мероприятий.</p>
                    <a href="#" class="btn btn-primary">Записаться</a>
                </div>
            </div>
        </div>
    </div>
</div> 

<!-- Форма записи -->
<div class="form-container">
    <form action="#" method="post"> 
        <h2 class="mb-4">Записаться на процедуру</h2>
        
        <div class="mb-3">
            <label for="fullname" class="form-label">ФИО</label>
            <input type="text" class="form-control" id="fullname" placeholder="Иванова Анна">
        </div>
        
        <div class="mb-3">
            <label for="phone" class="form-label">Номер телефона</label>
            <input type="tel" class="form-control" id="phone" placeholder="+7 (999) 123-45-67">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label> 
            <input type="email" class="form-control" id="email" placeholder="name@example.com"> 
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button> 
    </form> 
</div>