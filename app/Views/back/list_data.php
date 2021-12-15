
<div class="container mt-4">
    <h1>TESTING VIEW - CI4 table load</h1>

    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('admin/item/type/add') ?>" class="btn btn-primary">Add a Reg</a>
    </div>

    <div class="mt-3">
        <table class="table table-bordered" id="table-list">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ( isset( $dataToTable) && !empty( $dataToTable ) ) : ?>
                    <?php foreach ( $dataToTable as $row ) : ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td>
                                <a href="<?php echo base_url('editnames/' . $row['id']); ?>" class="btn btn-warning">Edit</a>
                                <a href="<?php echo base_url('delete/' . $row['id']); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>