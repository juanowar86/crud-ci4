<div class="container d-flex justify-content-center">
<div class="row">
    <form class="row g-3 needs-validation border rounded p-5" novalidate method="post" action="<?php echo base_url( $actionURI ); ?>">
        <legend><?php echo $title; ?></legend>
        
        <?php if( isset( $idItem ) ) : ?>
            <div class="col-lg-12 col-md-12">
                <label for="name" class="form-label">ID </label>
                <input type="text" class="form-control" value="<?php echo $idItem; ?>" disabled>
            </div>
            <input type="hidden" id="id" name="id" value="<?php echo $idItem; ?>">
        <?php endif; ?>
        
        <div class="col-lg-6 col-md-4">
            <label for="name" class="form-label">Film Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo ( isset( $resultQuery['name'] ) ) ? $resultQuery['name']: ''; ?>" required>
            <div class="invalid-feedback">
                Write the name
            </div>
        </div>
        
        <div class="col-lg-6 col-md-4">
            <label for="year" class="form-label">Film Year</label>
            <input type="number" class="form-control" min="1900" max="2050" step="1" id="year" name="year" value="<?php echo ( isset( $resultQuery['year'] ) ) ? $resultQuery['year']: '2000'; ?>">
        </div>

        <div class="col-lg-6 col-md-4">
            <label for="director" class="form-label">Film Director</label>
            <input type="text" class="form-control" id="director" name="director" value="<?php echo ( isset( $resultQuery['director'] ) ) ? $resultQuery['director']: 'alguien'; ?>" required>
            <div class="invalid-feedback">
                Write director
            </div>
        </div>

        <div class="col-lg-6 col-md-4">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" min="0" max="100" step="1" id="stock" name="stock" value="<?php echo ( isset( $resultQuery['stock'] ) ) ? $resultQuery['stock']: '1'; ?>" required>
            <div class="invalid-feedback">
                Insert number
            </div>
        </div>

        <div class="col-lg-12 col-md-8">
            <label for="synopsis" class="form-label">Synopsis</label>    
            <textarea class="form-control" name="synopsis" id="synopsis" cols="30" rows="8"><?php echo ( isset( $resultQuery['synopsis'] ) ) ? $resultQuery['synopsis']: 'No Data'; ?></textarea>
        </div>   

        <!-- retorno -->
        <input class="d-none" id="return" name="return" value="<?php echo $return; ?>">

        <div class="col-12">
            <button class="btn btn-primary" type="submit"><?php echo $btnText; ?></button>
        </div>
    </form>
    </div>
</div>