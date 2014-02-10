$(function()
{
	$('.date-pick').datePicker(
		{
			clickInput:true,
			startDate: '01/01/1960',
			endDate: (new Date()).asString()
		}
	);
});