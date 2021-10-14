<div>
    <div class="row" style="margin-top:2%;"> 
        <div class="col-md-12">
            <button 
                class="btn btn-primary float-end" 
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
            > Adicionar
            </button>
        </div>
    </div>
    <table class="table">     
        <thead> 
            <tr> 
                <th> Nome </th>
                <th> E-mail </th>
                <th> Senha </th>
            </tr>
        </thead>
    </table>

    <!--  MODAL  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addUser">
                <div class="modal-body">
            
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> Nome </label>
                        <input type="text" name="nome" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> E-mail </label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> Password </label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!--  END MODAL  -->
</div>  