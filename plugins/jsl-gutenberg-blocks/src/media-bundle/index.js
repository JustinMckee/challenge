import { __ } from "@wordpress/i18n";
import { registerBlockType } from "@wordpress/blocks";
import Edit from './Edit.js'
import Save from './Save.js'
import block from './block.json'
import './editor.scss'
import './style.scss'

// Custom attributes / Props

const attributes = {
}

// Built-in functions
const edit = ({attributes, setAttributes}) => (
  <Edit attributes={attributes} setAttributes={setAttributes} />
)

const save = ({attributes}) => (
  <Save attributes={attributes} />
)

registerBlockType(block, {
  edit: edit,
  save: save,
})
