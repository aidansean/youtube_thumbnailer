from project_module import project_object, image_object, link_object, challenge_object

p = project_object('youtube_thumbnailer', 'YouTube thumbnailer')
p.domain = 'http://www.aidansean.com/'
p.folder_name = 'aidansean'
p.path = 'youtube_thumbnailer'
p.preview_image    = image_object('%s/images/project.jpg'   %p.path, 150, 250)
p.preview_image_bw = image_object('%s/images/project_bw.jpg'%p.path, 150, 250)
p.github_repo_name = 'youtube_thumbnailer'
p.mathjax = True
p.tags = 'Tools'
p.technologies = 'HTML,JavaScript,YouTube'
p.links.append(link_object(p.domain, 'youtube_thumbnailer', 'Live page'))
p.introduction = 'This project takes a YouTube uri and provides the appropriate thumbnail images.'
p.overview = '''Occasionally it's useful to have the thumbnail for a YouTube video, and I often forget the exact path for doing this.  So I wrote this script that fetches the uri for the user.'''

p.challenges.append(challenge_object('The uri had to be parsed.', 'Since this is entirely Javascript based and in the browser there are no safety issues associated with the parsing.  Upon failure the page simply tells the user there was a problem.', 'Resolved'))

