(function(a){a.WR_Slider_Control=function(c){var b=this;b.data=c;a(window).load(b.init.bind(b))};a.WR_Slider_Control.prototype={init:function(){var b=this;b.container=a("#wr-"+wr_nitro_customize_slider.type+"-"+b.data.id);b.slider_control=b.container.find('input[type="range"]');b.slider_control.addClass("hidden").after(a("<div>").slider({range:"min",min:b.data.choices.min?parseInt(b.data.choices.min):0,max:b.data.choices.max?parseInt(b.data.choices.max):100,step:b.data.choices.step?parseInt(b.data.choices.step):1,value:parseInt(wp.customize.control(b.data.id).setting.get()),create:function(d,e){var c=b.data.choices.unit?b.data.choices.unit:"";a(this).children(".ui-slider-handle").html("<span>"+a(this).slider("value")+c+"</span>")},slide:function(d,e){var c=b.data.choices.unit?b.data.choices.unit:"";a(e.handle).html("<span>"+e.value+c+"</span>");if(b.data.transport=="postMessage"){wp.customize.control(b.data.id).setting.set(e.value)}},change:function(d,e){var c=b.data.choices.unit?b.data.choices.unit:"";a(e.handle).html("<span>"+e.value+c+"</span>");wp.customize.control(b.data.id).setting.set(e.value)}}));b.container.on("click",".reset-to-default",function(c){c.preventDefault();b.slider_control.next().slider("value",b.slider_control.attr("default-value"))})}}})(jQuery);