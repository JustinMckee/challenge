import { useBlockProps } from '@wordpress/block-editor';

const Save = ({attributes}) => {

  const blockProps = useBlockProps.save()

  const limitExcerpt = (e) => {

    if(e.length < 100)
      return e

    let s = e.substring(0, 100);
    s = s + '&hellip;</p>'

    return s
  }

  return (
    <div { ...blockProps }>
      {
        (Array.isArray(attributes.posts) && attributes.posts.length) && (
          <div className="jsl-e-row">
          {console.log(attributes.posts)}
            {
              attributes.posts.map((post)=>(
                    <a href={post.link} className="jsl-e-col-6">
                      <article class="jsl-card">
                        <header class="jsl-card-header">
                          <div class="jsl-card-image-wrapper">
                          {
                            post._embedded['wp:featuredmedia'][0].media_details.sizes.medium_large.source_url && (
                                <img class="jsl-card-image" src={post._embedded['wp:featuredmedia'][0].media_details.sizes.medium_large.source_url}
                                  />
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
                    </a>
                ))
            }
          </div>
        )
      }
    </div>
  )
}
export default Save;
