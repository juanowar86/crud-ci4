
<div class="container mt-4">
    <h1>TESTING VIEW - table load</h1>

    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('admin/item/add/'.$type) ?>" class="btn btn-primary">Add a Reg</a>
    </div>

    <div class="mt-3">
        <table class="table table-bordered" id="table-list">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Director</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ( isset( $dataToTable) && !empty( $dataToTable ) ) : ?>
                    <?php foreach ( $dataToTable as $row ) : ?>
                        <tr>
                            <td><?php echo $row['id_film']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['year']; ?></td>
                            <td><?php echo $row['director']; ?></td>
                            <td>
                                <a href="<?php echo base_url( 'admin/item/view/films/' . $row['id_film'] ); ?>" class="btn btn-warning">View/Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>