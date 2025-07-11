// phpcs:ignoreFile
import{t as p,D as l,a as u,T as d}from"./twig-TIIEE6v_.js";import{C as o}from"./constants-Cxr6wAJe.js";import"./_commonjsHelpers-_d1bhYXs.js";u(d);d.cache(!1);const a=e=>e,b=(e={})=>{const n=p.twig({id:"/app/web/themes/contrib/civictheme/components/00-base/background/background.stories.twig",data:[{type:"raw",value:`<div class="story-background-wrapper">
  <div
    class="ct-background ct-background--`,position:{start:0,end:86}},{type:"output",position:{start:86,end:102},stack:[{type:"Twig.expression.type.variable",value:"blend_mode",match:["blend_mode"],position:{start:86,end:102}}]},{type:"raw",value:`"
    style="background-image: url('`,position:{start:102,end:138}},{type:"output",position:{start:138,end:147},stack:[{type:"Twig.expression.type.variable",value:"url",match:["url"],position:{start:138,end:147}}]},{type:"raw",value:"'); background-color: ",position:{start:147,end:169}},{type:"output",position:{start:169,end:180},stack:[{type:"Twig.expression.type.variable",value:"color",match:["color"],position:{start:169,end:180}}]},{type:"raw",value:`"
  ></div>
</div>
`,position:{start:180,end:180}}],precompiled:!0});n.options.allowInlineIncludes=!0;try{let t=e.defaultAttributes?e.defaultAttributes:[];return Array.isArray(t)||(t=Object.entries(t)),a(n.render({attributes:new l(t),...e}))}catch(t){return a("An error occurred whilst rendering /app/web/themes/contrib/civictheme/components/00-base/background/background.stories.twig: "+t.toString())}},k={title:"Base/Background",component:b,argTypes:{blend_mode:{control:{type:"select"},options:o.SCSS_VARIABLES["ct-background-blend-modes"]},color:{control:{type:"color"}},url:{control:{type:"select"},options:o.BACKGROUNDS}}},r={parameters:{layout:"centered"},args:{url:o.BACKGROUNDS[Object.keys(o.BACKGROUNDS)[0]],color:"#003a4f",blend_mode:o.SCSS_VARIABLES["ct-background-blend-modes"][0]}};var s,c,i;r.parameters={...r.parameters,docs:{...(s=r.parameters)==null?void 0:s.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    url: Constants.BACKGROUNDS[Object.keys(Constants.BACKGROUNDS)[0]],
    color: '#003a4f',
    blend_mode: Constants.SCSS_VARIABLES['ct-background-blend-modes'][0]
  }
}`,...(i=(c=r.parameters)==null?void 0:c.docs)==null?void 0:i.source}}};const w=["Background"];export{r as Background,w as __namedExportsOrder,k as default};
