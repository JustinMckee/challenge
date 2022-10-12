import { useSelect } from '@wordpress/data';
import { useBlockProps } from '@wordpress/block-editor';
import { useEffect } from "@wordpress/element";

const Edit = ({attributes,setAttributes}) => {

  const {posts} = useSelect( (select) => {

    let records = select('core').getEntityRecords('postType','new-letters',{_embed: true})

    return {
      posts: records,
    }
  })

  useEffect(()=> {

    setAttributes({posts: posts})

  },[posts])

  const limitExcerpt = (e) => {

    if(e.length < 100)
      return e

    let s = e.substring(0, 100);
    s = s + '&hellip;</p>'

    return s
  }


  const blockProps = useBlockProps();

  return (
    <div { ...blockProps } >
      {
        (Array.isArray(posts) && posts.length) && (

          <div className="jsl-e-row">
            {

              posts.map((post)=>{

                return (
                    <div className="jsl-e-col-6">
                      <article class="jsl-card">
                        <header class="jsl-card-header">
                          <div class="jsl-card-image-wrapper">
                          {
                            post._embedded['wp:featuredmedia'][0].media_details.sizes.medium_large.source_url && (

                                <img class="jsl-card-image" src={post._embedded['wp:featuredmedia'][0].media_details.sizes.medium_large.source_url} />

                            )
                          }
                          </div>
                          <h2 class="jsl-card-title">{post.title.rendered}</h2>
                        </header>
                        <div class="jsl-card-body" dangerouslySetInnerHTML={{__html: limitExcerpt(post.excerpt.rendered)}}>
                        </div>
                        <div class="jsl-card-footer">
                          <button>Read More</button>
                        </div>
                      </article>
                    </div>
                  )

                }

              )

            }
          </div>

        )

      }

    </div>

  )

}

export default Edit
