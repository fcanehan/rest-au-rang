var usercheck = $("#usercheck");

$.ajax({
        type : 'GET',
        dataType : 'json',
        url : 'datas/users.json',
        success : function(data,textStatus,jqXHR) {
            var utilisateur = data.utilisateur;
            
        }
    });
    
    