function CheckNumber(number)
{
	var pattern = "0123456789.";
	var len = number.value.length;
	if (len != 0)
	{
		var index = 0;
		
		while ((index < len) && (len != 0))
			if (pattern.indexOf(number.value.charAt(index)) == -1)
			{
				if (index == len-1)
					number.value = number.value.substring(0, len-1);
				else if (index == 0)
					 	number.value = number.value.substring(1, len);
					 else number.value = number.value.substring(0, index)+number.value.substring(index+1, len);
				index = 0;
				len = number.value.length;
			}
			else index++;
	}
}
