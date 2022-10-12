import { __ } from "@wordpress/i18n";
import { registerBlockType } from "@wordpress/blocks";
import Edit from './Edit.js'
import Save from './Save.js'
import {withSelect, select} from '@wordpress/data'
import './editor.scss'
import './style.scss'
import block from './block.json'

// Custom attributes / Props

const attributes = {
}

// const EditBlock = (props) => (
//   <div className={props.className}>
//     <Edit {...props} />
//   </div>
// )

// Built-in functions
const edit = () => (
  <Edit />
)


const save = () => (
  <Save />
)

registerBlockType(block, {
  edit: edit,
  save: save,
})
