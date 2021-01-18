<?php

include 'Barista.php';

if (isset($_GET['country'])): ?>
    <?php $cofeFactory = new \Cofe\Barista(); ?>
    <?= $cofeFactory->handleOrder($_GET); ?>
<?php else: ?>
    <form action="" method="get">
        <div>
            <label for="country">Choose country:</label>
            <select id="country" name="country">
                <option value="spain">Spain</option>
                <option value="italy">Italy</option>
            </select>
        </div>

        <div>
            <input type="checkbox" name="extra[syrup]" value="syrup">Syrup<Br>
            <input type="checkbox" name="extra[addition]" value="addition">Addition<Br>
        </div>

        <p><input type="submit" value="Приготовить кофе"></p>
    </form>
<?php endif; ?>