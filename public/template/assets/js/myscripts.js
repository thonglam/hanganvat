   function kiemtra(){

        var a = document.getElementById('giamin').value;
        var b = document.getElementById('giamax').value;

        if (a > b)
        {
            alert('Không nhập giá tối thiểu lớn hơn giá tối đa');
        }else{
            document.getElementById("testform").submit();
        }
    }

    function checkQuan()
    {   
        var a = document.getElementById('giamin').value;
        var b = document.getElementById('giamax').value;

        if( a < 0  || b  <0){
            alert('Không được nhập số âm');
            document.getElementById('giamin').value = 1;
            document.getElementById('giamax').value = 1;
        }
    }
	function myFunction() {
		var x = document.getElementById("myCheck").checked;
		if (x == true){
			document.getElementById("nguoinhan").style.display = "block";
		}else{
			document.getElementById("nguoinhan").style.display = "none";
		}
		
	}
	function submitForm()
	{
		var a = "Đặt hàng thành công";
		alert(a);
	}

	function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}

    function validateForm()
    {
        var a=document.getElementById('name').value;
        var b=document.getElementById('email').value;
        var c=document.getElementById('address').value;
        var d=document.getElementById('phone').value;
        
        if (a==null || a=="" || b == null || b== "" || c==null || c=="" || d==null || d=="" )
        {
            alert(" Không được để trống");
            return false;
        }else{
        	if (!validateEmail(b)){
        		alert(" Vui lòng nhập Email hợp lệ");
        	}else{
        		document.getElementById("myForm").submit();
	        	alert('Đặt hàng thành công');
        	}
        }
    }
    function submitForm()
    {
        var a = "Cám ơn quý khách đã phản hồi. Chúng tôi sẽ trả lời trong thời gian sớm nhất.";
        alert(a);
    }
		function checkQuan()
	{	
		var a = document.getElementById('quantity').value;
		if( a < 0 ){
			alert('Không được nhập số âm');
			document.getElementById('quantity').value = 1;
		}
	}