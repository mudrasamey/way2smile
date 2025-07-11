// phpcs:ignoreFile
import{t as o,D as r,a as p,T as s}from"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";p(s);s.cache(!1);const a=d=>d,c=(d={})=>{const l=o.twig({id:"/app/web/themes/contrib/civictheme/components/00-base/responsive/responsive.stories.twig",data:[{type:"raw",value:`

<div data-collapsible data-collapsible-collapsed>
  <div>Trigger - All screens - No responsive</div>
  <div>Collapsible and collapsed on all screens. Not using responsive.</div>
</div>

<hr/>

<div data-collapsible data-collapsible-collapsed data-responsive=">=m">
  <div>Trigger - M, L, XL, XXL (collapsed)</div>
  <div>Collapsible and collapsed on M, L, XL, XXL screens only.</div>
</div>

<hr/>

<div data-collapsible data-responsive=">=m">
  <div>Trigger - M, L, XL, XXL</div>
  <div>Collapsible and NOT collapsed on M, L, XL, XXL screens only.</div>
</div>

<hr/>

<div data-collapsible data-collapsible-collapsed data-responsive="<m">
  <div>Trigger - XS, S (collapsed)</div>
  <div>Collapsible and collapsed on XS, S screens only.</div>
</div>

<hr/>

<div data-collapsible data-responsive="<m">
  <div>Trigger - XS, S</div>
  <div>Collapsible and NOT collapsed on XS, S screens only.</div>
</div>

<hr/>

<strong>Responsive component tests for every operator.</strong>

<hr/>
OPERATOR: =
<hr/>
<div data-collapsible data-responsive="=xxs"><div>Trigger - =XXS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="=xs"><div>Trigger - =XS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="=s"><div>Trigger - =S</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="=m"><div>Trigger - =M</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="=l"><div>Trigger - =L</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="=xl"><div>Trigger - =XL</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="=xxl"><div>Trigger - =XXL</div><div>Collapsible content</div></div>

<hr/>
OPERATOR: &lt;&gt;
<hr/>
<div data-collapsible data-responsive="<>xxs"><div>Trigger - &lt;&gt;XXS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<>xs"><div>Trigger - &lt;&gt;XS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<>s"><div>Trigger - &lt;&gt;S</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<>m"><div>Trigger - &lt;&gt;M</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<>l"><div>Trigger - &lt;&gt;L</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<>xl"><div>Trigger - &lt;&gt;XL</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<>xxl"><div>Trigger - &lt;&gt;XXL</div><div>Collapsible content</div></div>

<hr/>
OPERATOR: &gt;
<hr/>
<div data-collapsible data-responsive=">xxs"><div>Trigger - &gt;XXS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">xs"><div>Trigger - &gt;XS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">s"><div>Trigger - &gt;S</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">m"><div>Trigger - &gt;M</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">l"><div>Trigger - &gt;L</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">xl"><div>Trigger - &gt;XL</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">xxl"><div>Trigger - &gt;XXL</div><div>Collapsible content</div></div>

<hr/>
OPERATOR: &gt;=
<hr/>
<div data-collapsible data-responsive=">=xxs"><div>Trigger - &gt;=XXS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">=xs"><div>Trigger - &gt;=XS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">=s"><div>Trigger - &gt;=S</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">=m"><div>Trigger - &gt;=M</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">=l"><div>Trigger - &gt;=L</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">=xl"><div>Trigger - &gt;=XL</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive=">=xxl"><div>Trigger - &gt;=XXL</div><div>Collapsible content</div></div>

<hr/>
OPERATOR: &lt;
<hr/>
<div data-collapsible data-responsive="<xxs"><div>Trigger - &lt;XXS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<xs"><div>Trigger - &lt;XS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<s"><div>Trigger - &lt;S</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<m"><div>Trigger - &lt;M</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<l"><div>Trigger - &lt;L</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<xl"><div>Trigger - &lt;XL</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<xxl"><div>Trigger - &lt;XXL</div><div>Collapsible content</div></div>

<hr/>
OPERATOR: &lt;=
<hr/>
<div data-collapsible data-responsive="<=xxs"><div>Trigger - &lt;=XXS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<=xs"><div>Trigger - &lt;=XS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<=s"><div>Trigger - &lt;=S</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<=m"><div>Trigger - &lt;=M</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<=l"><div>Trigger - &lt;=L</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<=xl"><div>Trigger - &lt;=XL</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="<=xxl"><div>Trigger - &lt;=XXL</div><div>Collapsible content</div></div>

<hr/>
OPERATOR: None (defaults to &gt;=)
<hr/>
<!--Using 'xXs' instead of 'xxs' to test case insensitivity.-->
<div data-collapsible data-responsive="xXs"><div>Trigger - &gt;=XXS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="xs"><div>Trigger - &gt;=XS</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="s"><div>Trigger - &gt;=S</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="m"><div>Trigger - &gt;=M</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="l"><div>Trigger - &gt;=L</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="xl"><div>Trigger - &gt;=XL</div><div>Collapsible content</div></div>
<div data-collapsible data-responsive="xxl"><div>Trigger - &gt;=XXL</div><div>Collapsible content</div></div>
`,position:{start:52,end:52}}],precompiled:!0});l.options.allowInlineIncludes=!0;try{let i=d.defaultAttributes?d.defaultAttributes:[];return Array.isArray(i)||(i=Object.entries(i)),a(l.render({attributes:new r(i),...d}))}catch(i){return a("An error occurred whilst rendering /app/web/themes/contrib/civictheme/components/00-base/responsive/responsive.stories.twig: "+i.toString())}},T={title:"Base/Utilities/Responsive",component:c},e={parameters:{layout:"centered",html:{disable:!0}}};var v,t,n;e.parameters={...e.parameters,docs:{...(v=e.parameters)==null?void 0:v.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered',
    html: {
      disable: true
    }
  }
}`,...(n=(t=e.parameters)==null?void 0:t.docs)==null?void 0:n.source}}};const X=["Responsive"];export{e as Responsive,X as __namedExportsOrder,T as default};
