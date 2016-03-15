
function slide(id) {
	{
		  if ( $( "#subMenuItem" + id ).is( ":hidden" ) ) {
			$( "#subMenuItem" + id ).slideDown( "slow" );
			$( "#arrow" + id ).html ( "▼" );
			
		  } else {
			$( "#subMenuItem" + id ).slideUp( "slow" );
			$( "#arrow" + id ).html ( "▲" );
		  }
	}
}