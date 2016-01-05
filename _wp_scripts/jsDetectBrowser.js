function detectBrowser()
{
  this.supportLayer = false;
  this.supportDOM   = false;
  this.supportAll   = false;
  this.isGecko      = false;
  this.isOpera      = false;
  this.isOpera5     = false;
  this.isOpera6     = false;
  this.isIE         = false;
  this.isIE4        = false;

  if( document.layers )         { this.supportLayer = true; }
  if( document.getElementById ) { this.supportDOM = true; }
  if( document.all )            { this.supportAll = true; }
  if(( navigator.userAgent ).indexOf( "Gecko" )!=-1 ) { this.isGecko = true; }
  else if(( navigator.userAgent ).indexOf( "Opera" )!=-1 ) {
    this.isOpera = true;
    if(( navigator.userAgent ).indexOf( "Opera 5" )!=-1 ) this.isOpera5 = true;
    else if(( navigator.userAgent ).indexOf( "Opera/5" )!=-1 ) this.isOpera5 = true;
    if(( navigator.userAgent ).indexOf( "Opera 6" )!=-1 ) this.isOpera6 = true;
    else if(( navigator.userAgent ).indexOf( "Opera/6" )!=-1 ) this.isOpera6 = true;
  }
  else if(( navigator.userAgent ).indexOf( "IE" )!=-1 ) {
    this.isIE = true;
    if(( navigator.userAgent ).indexOf( "MSIE 4" )!=-1 ) { this.isIE4 = true; }
  }
}

var browser = new detectBrowser();