// phpcs:ignoreFile
import{L as i}from"./link-CPtzaQYl.js";import{C as l}from"./constants-Cxr6wAJe.js";import"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";import"./text-icon-Bk-7J0GE.js";import"./icon-tlIshJ_Z.js";const d={title:"Atoms/Link",component:i,argTypes:{theme:{control:{type:"radio"},options:["light","dark"]},text:{control:{type:"text"}},title:{control:{type:"text"}},hidden_text:{control:{type:"text"}},url:{control:{type:"text"}},is_external:{control:{type:"boolean"}},is_active:{control:{type:"boolean"}},is_disabled:{control:{type:"boolean"}},is_new_window:{control:{type:"boolean"}},icon_placement:{control:{type:"radio"},options:["before","after"]},icon_group_disabled:{control:{type:"boolean"}},icon_single_only:{control:{type:"boolean"}},icon:{control:{type:"select"},options:l.ICONS},modifier_class:{control:{type:"text"}},attributes:{control:{type:"text"}}}},e={parameters:{layout:"centered"},args:{theme:"light",text:"Link text",title:"Link title",url:"https://www.example.com",is_external:!1,is_active:!1,is_disabled:!1,is_new_window:!1,icon:"",icon_placement:"before",icon_group_disabled:!1,icon_single_only:!1,modifier_class:"",attributes:""}};var t,o,n;e.parameters={...e.parameters,docs:{...(t=e.parameters)==null?void 0:t.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    theme: 'light',
    text: 'Link text',
    title: 'Link title',
    url: 'https://www.example.com',
    is_external: false,
    is_active: false,
    is_disabled: false,
    is_new_window: false,
    icon: '',
    icon_placement: 'before',
    icon_group_disabled: false,
    icon_single_only: false,
    modifier_class: '',
    attributes: ''
  }
}`,...(n=(o=e.parameters)==null?void 0:o.docs)==null?void 0:n.source}}};const m=["Link"];export{e as Link,m as __namedExportsOrder,d as default};
