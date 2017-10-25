<div class="links">
        <h4 class="text-info">Account Information</h4>
        <form method="POST" action="/p_info">
                {{csrf_field()}}
                <div class="form-group">
                        <input type="text" name="nickname" placeholder="Nickname" class="form-control">
                </div>
                <div class="form-group">
                        <input type="number" name="age" placeholder="Age" class="form-control">
                </div>
                <div class="form-group">
                        <input type="number" name="weight" placeholder="Weight" class="form-control" step=".01">
                </div>
                <div class="form-group">
                        <input type="number" name="height" placeholder="Height" class="form-control" step=".01">
                </div>
                <div class="form-group">
                        <input type="date" name="birthdate" class="form-control">
                </div>
                <input type="submit" name="submit" value="Save" class="btn btn-success">
        </form>
</div>