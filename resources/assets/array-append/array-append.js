function Weiwait () {
    this.appendLine = function (left = '', right = '') {
        let line = "<tr><td><div style='margin-bottom:10px;' class='input-group'><span class='input-group-addon'><i class='fa fa-pencil fa-fw'></i></span><input class='form-control' type='text' value='"+left+"'></div></td><td><div style='margin-bottom:10px;' class='input-group'><span class='input-group-addon'><i class='fa fa-pencil fa-fw'></i></span><input class='form-control' type='text' value='"+right+"'></div></td><td><span class='btn btn-warning' onclick='deleteTr(this)' style='width:90%;margin-left: 10%;margin-bottom:10px;'>x</span></td></tr>";

        $('#add-btn').before(line);
    };
}
