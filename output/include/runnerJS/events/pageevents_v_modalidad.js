
Runner.pages.PageSettings.addPageEvent('public.v_modalidad',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){});Runner.pages.PageSettings.addPageEvent('public.v_modalidad',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){this.on('afterSave',function(){var pageObj=window.listPage;Runner.runnerAJAX(Runner.pages.getUrl(pageObj.tName,pageObj.pageType)+"?a=return",pageObj.ajaxBaseParams,function(respObj){pageObj.pageReloadHn.call(pageObj,respObj)});});});